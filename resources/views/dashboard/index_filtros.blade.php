<div class="main-box">
    <div class="main-box-body">

        {{ Form::open(['method' => 'get', 'url' => route('dashboard-index')]) }}

            <br>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Valor</label>
                        <select name="status" class="form-control">
                            <option value="">Todos</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Cores</label>
                        <select name="status" class="form-control">
                            <option value="">Todos</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tamanho</label>
                        <select name="status" class="form-control">
                            <option value="">Todos</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                 <div class="col-md-4">
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">Todos</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="form-group">
                        <label>Cor</label>
                        <select name="status" class="form-control">
                            <option value="">Todos</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">Todos</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary col-xs-12">Filtrar</button>
                </div>
            </div>

        {{ Form::close() }}

    </div>
</div>