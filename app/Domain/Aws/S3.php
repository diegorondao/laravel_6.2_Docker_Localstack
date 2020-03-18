<?php

namespace App\Domain\Aws;

use Illuminate\Support\Facades\Storage;

class S3
{
    public static function copy($disk_origin, $disk_destiny, $key_origin, $key_destiny)
    {
        if (Storage::disk($disk_origin)->has($key_origin)) {
            $s3 = Storage::disk($disk_origin);
            $client = $s3->getDriver()->getAdapter()->getClient();

            $root_origin = \Config::get('filesystems.disks.s3.root');
            $root_destiny = \Config::get('filesystems.disks.s3_excluidos.root');

            if ($root_origin && substr($root_origin, -1) != '/') {
                $key_origin = $root_origin . '/' . $key_origin;
            } else {
                $key_origin = $root_origin . $key_origin;
            }

            if ($root_destiny && substr($root_destiny, -1) != '/') {
                $key_destiny = $root_destiny . '/' . $key_destiny;
            } else {
                $key_destiny = $root_destiny . $key_destiny;
            }

            $client->copyObject([
                'Bucket' => \Config::get('filesystems.disks.' . $disk_destiny . '.bucket'),
                'Key' => $key_destiny,
                'CopySource' => urlencode(
                    \Config::get('filesystems.disks.' . $disk_origin . '.bucket') .
                    '/' . $key_origin
                )
            ]);

            return true;
        }

        return false;
    }

    public static function move($disk_origin, $disk_destiny, $key_origin, $key_destiny)
    {
        if (self::copy($disk_origin, $disk_destiny, $key_origin, $key_destiny)) {
            Storage::disk('s3')->delete($key_origin);
        }
    }

    public static function delete($key)
    {
        if (Storage::disk('s3')->has($key)) {
            $s3 = Storage::disk('s3');
            $client = $s3->getDriver()->getAdapter()->getClient();

            $root = \Config::get('filesystems.disks.s3.root');

            if ($root && substr($root, -1) != '/') {
                $key = $root . '/' . $key;
            } else {
                $key = $root . $key;
            }

            $client->copyObject([
                'Bucket' => \Config::get('filesystems.disks.s3.bucket_delete'),
                'Key' => 'gestaoriscos/' . $key,
                'CopySource' => urlencode(\Config::get('filesystems.disks.s3.bucket') . $key)
            ]);

            $s3->delete($key);
        }
    }

    public static function url($disk, $key)
    {
        if (Storage::disk($disk)->has($key)) {
            $s3 = Storage::disk($disk);
            $client = $s3->getDriver()->getAdapter()->getClient();
            $expiry = "+10 minutes";

            $command = $client->getCommand('GetObject', [
                'Bucket' => \Config::get('filesystems.disks.' . $disk . '.bucket'),
                'Key' => $key
            ]);

            $request = $client->createPresignedRequest($command, $expiry);

            return (string)$request->getUri();
        }

        return null;
    }
}
