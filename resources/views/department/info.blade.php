<html>
    @foreach ($dept as $d)
        <br>
        Department Name: {{$d->d_name}} <br><br>
        ID : {{$d->d_id}} <br> <br>
        OFFERED COURSES: <br>
        @foreach ($d->course as $c)           
            @foreach ($c->course_teacher as $ct)
                <br>
                {{$c->c_name}} -> {{$ct->teacher->t_name}} <br>
                @foreach ($ct->course_student as $cs)
                    {{$cs->student->st_name}} <br>                   
                @endforeach
            @endforeach 
        @endforeach
        
    @endforeach
</html>