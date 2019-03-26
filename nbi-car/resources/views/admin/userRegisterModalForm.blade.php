<div class="form-group">
        <div class="form-row">
        <div class="col-md-4">
            <label for="firstName" class="col-form-label text-md-right">{{ __('First Name') }}</label>
            <div class="">
                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required>

                @if ($errors->has('firstName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firstName') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <label for="middleInitial" class="col-form-label text-md-right">{{ __('Middle Initial') }}</label>
            <div class="">
                <input id="middleInitial" type="text" class="form-control{{ $errors->has('middleInitial') ? ' is-invalid' : '' }}" name="middleInitial" value="{{ old('middleInitial') }}" required>

                @if ($errors->has('middleInitial'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('middleInitial') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <label for="lastName" class="col-form-label text-md-right">{{ __('LastName') }}</label>
            <div class="">
                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required>

                @if ($errors->has('lastName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
        <div class="col-md-6">
            <label for="username" class="">Username</label>
            <div class="">
                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label for="role" class="">{{ __('Role') }}</label>
            <div class="">
                <select name="role" id="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" required>

                    <option value="Agent">Agent</option>
                    <option value="Encoder">Encoder</option>
                    <option value="Administrator">Administrator</option>
                </select>
                @if ($errors->has('role'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
                <label for="password" class="">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-6">
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-md-12">
                <div class="">
                    <input type="hidden" id="description" name="description" class="form-control" value="Administrator register new User with user id = ">
                    <input type="hidden" id="action" name="action" class="form-control" value="Add"> {{-- QUERY HERE --}}
                    <input type="hidden" name="userid" id="userid" value="{{ Auth::user()->userid }}">
                </div>
            </div>
        </div>
    </div>
