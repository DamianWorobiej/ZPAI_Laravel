<div class="form-group">
        <!--<label for="nazwa">Nazwa</label>-->
        {!! Form::label('nazwa', 'Nazwa') !!}
        <!--<input type="text" id="nazwa" name="nazwa" class="form-control" placeholder="Podaj nazwę">-->
        {!! Form::text('nazwa', null, ['class'=>'form-control','placeholder'=>'Podaj nazwę']) !!}
</div>
    
    <div class="form-group" id="desc">
        {!! Form::label('opis','Opis') !!}
        {!! Form::textarea('opis', null, ['class'=>'form-control','placeholder'=>'Podaj opis']) !!}
<!--        <label for="opis">Opis</label>
        <br>
        <textarea id="ta-desc" rows="5" cols="80" placeholder="Podaj opis"></textarea>-->
        <!--<input type="textarea" rows="10" id="opis" name="opis" class="form-control" placeholder="Podaj opis">-->
    </div>
    
    <div class="form-group">
        {!! Form::label('img', 'Ścieżka obrazu') !!}
        {!! Form::text('img', null, ['class'=>'form-control','placeholder'=>'Podaj ścieżkę obrazu']) !!}

<!--        <label for="img">Ścieżka obrazu</label>
        <input type="text" id="img" name="img" class="form-control" placeholder="Podaj ścieżkę obrazu">-->
    </div>
    
    <div class="form-group">
        {!! Form::label('img_opis', 'Opis obrazu') !!}
        {!! Form::text('img_opis', null, ['class'=>'form-control','placeholder'=>'Podaj Opis obrazu']) !!}
<!--        <label for="img_opis">Opis obrazu</label>
        <input type="text" id="img_opis" name="img_opis" class="form-control" placeholder="Podaj opis obrazu">-->
    </div>
    
    <div class="form-group">
        {!! Form::label('img_thumb', 'Miniatura') !!}
        {!! Form::text('img_thumb', null, ['class'=>'form-control','placeholder'=>'Podaj miniaturę']) !!}
<!--        <label for="img_thumb">Ścieżka miniatury</label>
        <input type="text" id="img_thumb" name="img_thumb" class="form-control" placeholder="Podaj ścieżkę miniatury">-->
    </div>
    
    <div class="form-group">
        {!! Form::label('kategoria_id', 'Kategoria') !!}
        {!! Form::select('kategoria_id', $categories, null, ['class'=>'form-control', 'placehholder'=>'Wybierz kategorie']) !!}
    
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Zapisz</button>
    </div>

{!! Form::close() !!}