<label for="myMultiselect">Выберите вид</label>
<select name="breed" id="" class="form-select" value="выберите" required>
    <option disabled selected>Выберите вид </option>
    @foreach ($kind as $kind)
    <option value="{{$kind['id']}}" name="breed kindUse" id="kind">{{$kind['title']}} </option>
    @endforeach
</select>
<br>
<label>Желаемая услуга</label>
<div id="reveal-wrap">
    <p id="reveal-click" class="form-select">Выберите услуги</p>
    <div id="hidden-div">
        <ul>
            <div class="form-check">
                <!-- @foreach ($kind as $kind)
                @if(?)
                @foreach ($services_d as $services_d) <input type="checkbox" value="{{ $services_d['id'] }}"
                    class="form-check-input">
                <label class="form-check-label" for="exampleCheck1"></label>{{ $services_d['title'] }} </label><br>
                @endforeach

                @else
                @foreach ($services_c as $services_c)
                <input type="checkbox" value="{{ $services_c['id'] }}" class="form-check-input">
                <label class="form-check-label" for="exampleCheck1"></label>{{ $services_c['title'] }} </label><br>
                @endforeach
                @endif

                @endforeach -->
            </div>
        </ul>
    </div>
</div>
