@include('header')
 
 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">  
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($productdata as $p)
                        <tr>
                          <td>{{$p->ID}}</td>
                          <td>{{$p->Username}}</td>
                          <td>{{$p->Email}}</td>
                          <td>{{$p->Mobile}}</td>
                          <td><a href="{{url('/')}}/edit/{{$p->ID}}">Edit</a></td>
                          <td><a href="{{url('/')}}/delete/{{$p->ID}}">Delete</a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- partial:partials/_footer.html -->

              
              @include('footer')