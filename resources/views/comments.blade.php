@extends('main')

@section('content')
    Hello
    @endsection
@section('form')
    <form class="form-horizontal">
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Имя</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">E-mail</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="comment">Комментарий</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="comment" name="comment"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="save"></label>
                <div class="col-md-4">
                    <button id="save" name="save" class="btn btn-danger">Записать</button>
                </div>
            </div>

        </fieldset>
    </form>

@endsection