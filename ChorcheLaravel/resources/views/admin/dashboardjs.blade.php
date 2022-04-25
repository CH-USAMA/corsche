<script src="{{asset('js/loadingoverlay.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> -->
<script type="text/javascript">
        $(document).ready(function () {
            $('#election_position').select2({
                placeholder: "Select a state",
                allowClear: true,
            });
            $('.create_election').click(() => {
                // $.LoadingOverlay("show");
                $('.create_tab_div').addClass('d-none');
                setTimeout(function () {
                    // $.LoadingOverlay("hide");
                    $('.creat_election_div').removeClass('d-none');
                }, 2000);
                    $( "#start_date" ).datepicker();
                    $( "#end_date" ).datepicker();
            });
            $("form").submit(function (event) {
                event.preventDefault();
                // $.LoadingOverlay("show");
                var formData = {
                name: $("#name_of_election").val(),
                start_date: $("#start_date").val(),
                start_time: $("#start_time").val(),
                end_date  : $("#end_date").val(),
                end_time  : $("#end_time").val(),
                Position  : $("#Position").val()
                };
                console.log(formData);
                var data = new FormData( $('#adminForm')[0] );
                data.append("election_position", $('#election_position').find(":selected").text());
                console.log(data);
                url = "{{ route('createElection') }}";
                $.ajax({
                    url : url,
                    type : 'POST',
                    data: data,
                    contentType: false,
                    processData: false,
                    success : function(data) {
                    data = JSON.parse(JSON.stringify(data));
                    // if (!data.success) {
                    // $.LoadingOverlay("hide");
                    //     toastr.info(data.message, 'Info');
                    // }

                    if (data.success) {
                        // $.LoadingOverlay("hide");
                        location.reload();
                        toastr.success(data.message, 'Success');
                        // setTimeout(()=>{
                        //   window.history.back();
                        // },1300);
                    }
                    },
                    error : function(data){
                        // $.LoadingOverlay("hide");
                        location.reload();
                        toastr.error('Whoops, looks like something went wrong');
                    }
                });
                

            });
        });
</script>