@extends('templateshome')
<br><br><br>
<html>
<h1>
{{auth()->user()->username}}
</h1>
<img src="{{route('image', ['folder' => 'fotoprofiluser', 'filename' => auth()->user()->foto_profile])}}">

</html>
