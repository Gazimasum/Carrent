<!-- Loading Scripts -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/Chart.min.js')}}"></script>
<script src="{{asset('admin/js/fileinput.js')}}"></script>
<script src="{{asset('admin/js/chartData.js')}}"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">

</script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
      {!! Toastr::message() !!}
<script>

// window.onload = function(){
//
//   // Line chart from swirlData for dashReport
//   var ctx = document.getElementById("dashReport").getContext("2d");
//   window.myLine = new Chart(ctx).Line(swirlData, {
//     responsive: true,
//     scaleShowVerticalLines: false,
//     scaleBeginAtZero : true,
//     multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
//   });
//
//   // Pie Chart from doughutData
//   var doctx = document.getElementById("chart-area3").getContext("2d");
//   window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});
//
//   // Dougnut Chart from doughnutData
//   var doctx = document.getElementById("chart-area4").getContext("2d");
//   window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});
//
// }
// </script>
<script type="text/javascript">
function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#blah')
                  .attr('src', e.target.result)
                  .width(150)
                  .height(200);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>
