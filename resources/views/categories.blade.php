
<ul>

@foreach($categories as $category)
<li><a href ="{{route("category.get", ["id"=>$category->id])}}">{{$category->name}}</a></li>
@endforeach
</ul> 

<form method="Post">
    <span>Category name</span>
    <input type ="test" name="name" placeholder="...">
    <input type ="hidden" name="token" placeholder="...">
    <button type ="submit">Add category</button>
    <button type ="reset">Cancel</button>
</form>
    
 
