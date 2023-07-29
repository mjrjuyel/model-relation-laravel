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
        <link rel="stylesheet" href="">

        <style>
            *{
                padding: 0;
                margin: 0;
                outline : 0;
            }
            body{
                background: #f9f9f9;
                display : flex;
                height: 100vh;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <section class="text-center">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <table class="table table-striped" border="1" border-collapse="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Post</th>
                                <th>Name</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                       <tbody>
                      
                        @foreach($tag as $data)
                        <tr>
                        <td>{{$data->tag_name}}</td>
                        <td>----</td>
                        <td>---</td>
                        </tr>
                        @endforeach
                       
                       </tbody> 
                    </table>
                </div>
            </row>
        </section>     
        <script src="" async defer></script>
    </body>
</html>