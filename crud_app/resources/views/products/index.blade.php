<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <form action="/search" method="get">
                        <input type="text" name='query'class="form-control">
                        <input type="submit" name='search'class="btn btn-info">
                    </form>
                    @if ($status= Session::get('success'))
                      <div
                        class="alert alert-danger alert-dismissible fade show"
                        role="alert"
                      >
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close"
                        ></button>
                      
                        <strong>{{ $status }}</strong> 
                      </div>
                        
                    @endif
                    <h1 class="text-center text-secondary display-2 my-3">Our Latest Products</h1>

                    {{-- dynamic section start --}}
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card my-3" >
                            <img src="/product_uploads/{{ $product['image']}}" height="300" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{ $product['title']}}</h5>
                              <p class="card-text">{{ $product['description']}}</p>
                              <p class="card-text">Available: {{ $product['stock']}} peices</p>
                              <p class="card-text">Rs. {{ $product['price']}} Only</p>
                              <a href="/editproduct/{{ $product['id']}}" class="btn btn-primary">Edit</a>
                              <a href="/deleteproduct/{{ $product['id']}}" class="btn btn-danger">delete</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
                    {{-- dynamic section end --}}
                </div>
            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>