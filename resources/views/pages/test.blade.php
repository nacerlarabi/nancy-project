
<!-- Wrapper -->

{{Form::open(['route' => 'test-page-store', 'files' => true])}}

{{Form::label('user_photo', 'User Photo',['class' => 'control-label'])}}
{{Form::file('user_photo')}}
{{Form::submit('Save', ['class' => 'btn btn-success'])}}

{{Form::close()}}

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js?1"></script>

</body>
