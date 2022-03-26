

<div class="row">
    <div class="col-md-12">
      <div class="form-group row">
        <label for="first_name" class="col-md-3 col-form-label">First Name</label>
        <div class="col-md-9">
          <input type="text" name="first_name" id="first_name" value="{{old('first_name',$contact->first_name)}}" class="form-control @error('first_name') is-invalid @enderror">
          @error('first_name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
        <div class="col-md-9">
          <input type="text" name="last_name" id="last_name" value="{{old('last_name',$contact->last_name)}}" class="form-control @error('last_name') is-invalid @enderror">
          @error('last_name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="age" class="col-md-3 col-form-label">Age</label>
        <div class="col-md-9">
          <input type="text" name="age" id="age" value="{{old('age',$contact->age)}}" class="form-control @error('age') is-invalid @enderror">
          @error('age')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="phone" class="col-md-3 col-form-label">Phone</label>
        <div class="col-md-9">
          <input type="text" name="phone" id="phone" value="{{old('phone',$contact->phone)}}" class="form-control @error('phone') is-invalid @enderror">
          @error('phone')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="address" class="col-md-3 col-form-label">Address</label>
        <div class="col-md-9">
          <textarea name="address" id="address" rows="3" value="{{old('address', $contact->address )}}" class="form-control @error('address') is-invalid @enderror">{{old('address', $contact->address )}}</textarea>
          @error('address')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="description" class="col-md-3 col-form-label">description</label>
        <div class="col-md-9">
          <textarea name="description" id="description" rows="3" value="{{old('description', $contact->description )}}" class="form-control @error('description') is-invalid @enderror">{{old('address', $contact->description )}}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
      </div>
      <hr>
      <div class="form-group row mb-0">
        <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary">{{$contact->exists ? 'Update':'Save'}}</button>
            <a href="{{route('contacts.index')}}" class="btn btn-outline-secondary">Cancel</a>
        </div>
      </div>
    </div>
  </div>
