<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
	<div class="col-md-12">
          <div class="page-header">
	   <h1>Búsqueda de usuarios             
             <form action="{{ route('users') }}" method="GET" class="form-inline pull-right">
	       <div class="form-group">
		 <input type="text"
                        name="name",
                        class="form-control"
                        placeholder="Nombre"/>
	       </div>
               <div class="form-group">
		 <input type="text"
                        name="email",
                        class="form-control"
                        placeholder="Email"/>
	       </div>
               <div class="form-group">
		 <input type="text"
                        name="bio",
                        class="form-control"
                        placeholder="Bio"/>
               </div>
               <div class="form-group">
		 <button type="submit" class="btn btn-default">
                   <span class="glyphicon glyphicon-search"></span> 
                 </button>
               </div>
             </form>
            </h1>
          </div>
	  <div class="col-md-8">
	    <table class="table table-hover table-striped">
	      <tbody>
                @foreach($users as $user)
		<tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->bio}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $users->render() }}
          </div>
        </div>
      </div>    
    </div>
  </body>
</html>
