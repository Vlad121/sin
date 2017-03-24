
<h4>{{$category->name}}</h4>
<ul>
@foreach ($category->articles as $article)
<li>{{$article->title}}<li>
@endforeach
</ul>
    
<form method="Post">
    <span>Category name</span>
    <input type ="test" name="name" placeholder="...">
    <input type ="hidden" name="token" placeholder="...">
    <button type ="submit">Add article</button>
    <button type ="reset">Cancel</button>
</form>
    
