<h1>this is my api page</h1>
<td>{{$collection[0]['id']}}</td>
<table>
<tr>
<td>id</td>
<td>title</td>
<td>Image</td>
<td>thumbnail</td>
</tr>

@for ($i = 0; $i <count($collection); $i++)
    <tb>{{$collection[$i]["id"]}}</tb><br/><br/>
    <tb>{{$collection[$i]["title"]}}</tb><br/><br/>
    <tb><img src={{$collection[$i]["url"]}} alt-""> </tb><br/><br/>
    <tb><img src={{$collection[$i]["thumbnailUrl"]}} alt-""></tb><br/><br/>
@endfor



