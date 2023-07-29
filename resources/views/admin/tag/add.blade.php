<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <section class="header_part">
        <form method="post" action="{{url('/tag_insert')}}">
            @csrf
            <h1 class="text-center">Tag Page</h1>
                <div class="row">
            
                    <div class="col-md-6 offset-md-3">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tag Name: </label>
                            <input type="text" class="form-control" id="" name="tag_name">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </div>
                </div>
                
        </form>
        </section>   
               
        <script src="" async defer></script>
    </body>
</html>