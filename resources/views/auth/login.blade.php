@extends('layout.base')
  
@section('content')
<style>
.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1rem;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
  width: 100%;

  &::placeholder {
    color: transparent;
  }

  &:placeholder-shown ~ .form__label {
    font-size: 1rem;
    cursor: text;
    top: 20px;
  }
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  ~ .form__label {
    position: absolute;
    top: 0;
    display: block;
    transition: 0.2s;
    font-size: 1rem;
    color: $primary;
    font-weight:700;    
  }
  padding-bottom: 6px;  
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #ffcb40,#ffcb40);
  border-image-slice: 1;
}
/* reset input */
.form__field{
  &:required,&:invalid { box-shadow:none; }
}
.sendButton:hover{  
    background: #ffcb40;
    border: 3px solid #ffcb40;
}
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active{
    -webkit-box-shadow: 0 0 0 30px #fafafa inset !important;
}
</style>
<main class="login-form">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6">
                    <h2 class="text-center mb-3">Iniciar sesión</h2>
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="rounded border">
                            <div class="p-3">
                                <div class="form__group field mb-2">
                                    <input type="email" class="form__field" placeholder="Correo" name="email" id='email' required />
                                    <label for="email" class="form__label">Correo</label>
                                </div>

                                <div class="form__group field mb-4">
                                    <input type="password" class="form__field" placeholder="Contraseña" name="password" id='password' required />
                                    <label for="password" class="form__label">Contraseña</label>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul style="margin-bottom: 0px !important;">
                                            @foreach ($errors->all() as $error)
                                                <li style="list-style: none;">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                  <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="form-check-label" style="font-size: 0.8rem;">Recuérdame</label>
                                  </div>

                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-block sendButton" style="border: 3px solid #ffcb40">Iniciar sesión</button>
                                </div>

                            </div>
                          </div>
                          
                      </form>
                        
          </div>
      </div>
  </div>
</main>
@endsection