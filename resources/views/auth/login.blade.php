@extends('app')
@section('content')
  <main class="signup-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <h3 class="card-header text-center"> Iniciar sesión</h3>
            <div class="card-body">
              <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="form-group mb-3">
                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                      <span class="text-danger">{{ $$errors->first('email' )}}</span>
                  @endif
                </div>
                <div class="form-group mb-3">
                  <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                      <span class="text-danger">{{ $$errors->first('password' )}}</span>
                  @endif
                </div>
                <div class="form-group mb-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> Recuerdame;D 
                    </label>
                  </div>
                </div>
                <div class="d-grid mx-auto">
                  <button type="submit" class="btn btn-dark btn-block">Iniciar sesión</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

