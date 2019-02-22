<h1>list of courses</h1>
<ul>
@foreach($list as $courses)
<li>{{$courses->CourseCode}}::{{$courses->CourseName}}::{{$courses->CourseDuration}}::{{$courses->Price}}</li>
@endforeach
</ul>