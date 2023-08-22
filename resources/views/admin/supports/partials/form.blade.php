<div>
    <label for="subject">Assunto:</label>
    <input type="text" id="subject" name="subject" value="{{$support->subject ?? old('subject')}}">
    <br><br>

    <label for="status">Status:</label>
    <select id="status" name="status">

        <option value="a" {{isset($support->status) == "a" ? "selected" : 'a'}}>Opção A</option>
        {{-- <option value="p" {{$support->status == "p" ? "selected" : 'a'}}>Opção P</option>
        <option value="c" {{$support->status == "c" ? "selected" : 'a'}}>Opção C</option> --}}
    </select>
    <br><br>

    <label for="body">Mensagem:</label>
    <textarea id="body" name="body" rows="4" cols="50">{{$support->body ?? old('body')}}</textarea>
    <br><br>

    <input type="submit" value="Enviar">
</div>
