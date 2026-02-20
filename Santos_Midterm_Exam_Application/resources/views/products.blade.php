<!DOCTYPE html>
<html >
    <head>
        <title> Products </title> 
    </head>     
    <body> 
        <div style ="
            background: white; 
            width:300px; 
            margine: 15px; auto; 
            border-radius: 15px; 
            box-shadow:0 0 5px rgba(0,0,0,0.1)">
            @foreach($products as $product)
                <h2>{{$product['name']}}</h2> 
                <p>Price: {{$product['price']}}</p> 
            @endforeach
        </div>
    </body> 
    </head> 
</html>   


        