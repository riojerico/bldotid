<script src="../assets/js/bootstrap.min.js"></script>
<!-- gauge js -->
<script type="text/javascript" src="../assets/js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="../assets/js/gauge/gauge_demo.js"></script>
<!-- chart js -->
<script src="../assets/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="../assets/js/icheck/icheck.min.js"></script>
<!-- custom -->
<script src="../assets/js/custom.js"></script>
<!-- pace -->
<script src="../assets/js/pace/pace.min.js"></script>
<!-- tooltip -->
<script>
$(document).ready(function(){
    $('[data-toggles="tooltip"]').tooltip();
});
</script>
<!-- #### CORE -->




<?php
  switch ($page) {

    case 'dasbor':
      ?>
      <!-- flot js -->
      <!--[if lte IE 8]><script type="text/javascript" src="../assets/js/excanvas.min.js"></script><![endif]-->
      <script type="text/javascript" src="../assets/js/flot/jquery.flot.js"></script>
      <script type="text/javascript" src="../assets/js/flot/jquery.flot.pie.js"></script>
      <script type="text/javascript" src="../assets/js/flot/jquery.flot.orderBars.js"></script>
      <script type="text/javascript" src="../assets/js/flot/jquery.flot.time.min.js"></script>
      <script type="text/javascript" src="../assets/js/flot/date.js"></script>
      <script type="text/javascript" src="../assets/js/flot/jquery.flot.spline.js"></script>
      <script type="text/javascript" src="../assets/js/flot/jquery.flot.stack.js"></script>
      <script type="text/javascript" src="../assets/js/flot/curvedLines.js"></script>
      <script type="text/javascript" src="../assets/js/flot/jquery.flot.resize.js"></script>
      <script>
          $(document).ready(function () {
              // [17, 74, 6, 39, 20, 85, 7]
              //[82, 23, 66, 9, 99, 6, 2]
              var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

              var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
              $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                  data1, data2
              ], {
                  series: {
                      lines: {
                          show: false,
                          fill: true
                      },
                      splines: {
                          show: true,
                          tension: 0.4,
                          lineWidth: 1,
                          fill: 0.4
                      },
                      points: {
                          radius: 0,
                          show: true
                      },
                      shadowSize: 2
                  },
                  grid: {
                      verticalLines: true,
                      hoverable: true,
                      clickable: true,
                      tickColor: "#d5d5d5",
                      borderWidth: 1,
                      color: '#fff'
                  },
                  colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                  xaxis: {
                      tickColor: "rgba(51, 51, 51, 0.06)",
                      mode: "time",
                      tickSize: [1, "day"],
                      //tickLength: 10,
                      axisLabel: "Date",
                      axisLabelUseCanvas: true,
                      axisLabelFontSizePixels: 12,
                      axisLabelFontFamily: 'Verdana, Arial',
                      axisLabelPadding: 10
                          //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                  },
                  yaxis: {
                      ticks: 8,
                      tickColor: "rgba(51, 51, 51, 0.06)",
                  },
                  tooltip: false
              });

              function gd(year, month, day) {
                  return new Date(year, month - 1, day).getTime();
              }
          });
      </script>

      <!-- worldmap -->
      <script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
      <script type="text/javascript" src="../assets/js/maps/gdp-data.js"></script>
      <script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
      <script type="text/javascript" src="../assets/js/maps/jquery-jvectormap-us-aea-en.js"></script>
      <script>
          $(function () {
              $('#world-map-gdp').vectorMap({
                  map: 'world_mill_en',
                  backgroundColor: 'transparent',
                  zoomOnScroll: false,
                  series: {
                      regions: [{
                          values: gdpData,
                          scale: ['#E6F2F0', '#149B7E'],
                          normalizeFunction: 'polynomial'
                      }]
                  },
                  onRegionTipShow: function (e, el, code) {
                      el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                  }
              });
          });
      </script>
      <!-- skycons -->
      <script src="../assets/js/skycons/skycons.min.js"></script>
      <script>
          var icons = new Skycons({
                  "color": "#73879C"
              }),
              list = [
                  "clear-day", "clear-night", "partly-cloudy-day",
                  "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                  "fog"
              ],
              i;

          for (i = list.length; i--;)
              icons.set(list[i], list[i]);

          icons.play();
      </script>

      <!-- dashbord linegraph -->
      <script>
          var doughnutData = [
              {
                  value: 30,
                  color: "#455C73"
              },
              {
                  value: 30,
                  color: "#9B59B6"
              },
              {
                  value: 60,
                  color: "#BDC3C7"
              },
              {
                  value: 100,
                  color: "#26B99A"
              },
              {
                  value: 120,
                  color: "#3498DB"
              }
      ];
          var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
      </script>
      <!-- /dashbord linegraph -->
      <!-- datepicker -->
      <script type="text/javascript">
          $(document).ready(function () {

              var cb = function (start, end, label) {
                  console.log(start.toISOString(), end.toISOString(), label);
                  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                  //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
              }

              var optionSet1 = {
                  startDate: moment().subtract(29, 'days'),
                  endDate: moment(),
                  minDate: '01/01/2012',
                  maxDate: '12/31/2015',
                  dateLimit: {
                      days: 60
                  },
                  showDropdowns: true,
                  showWeekNumbers: true,
                  timePicker: false,
                  timePickerIncrement: 1,
                  timePicker12Hour: true,
                  ranges: {
                      'Today': [moment(), moment()],
                      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                      'This Month': [moment().startOf('month'), moment().endOf('month')],
                      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                  },
                  opens: 'left',
                  buttonClasses: ['btn btn-default'],
                  applyClass: 'btn-small btn-primary',
                  cancelClass: 'btn-small',
                  format: 'MM/DD/YYYY',
                  separator: ' to ',
                  locale: {
                      applyLabel: 'Submit',
                      cancelLabel: 'Clear',
                      fromLabel: 'From',
                      toLabel: 'To',
                      customRangeLabel: 'Custom',
                      daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                      monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                      firstDay: 1
                  }
              };
              $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
              $('#reportrange').daterangepicker(optionSet1, cb);
              $('#reportrange').on('show.daterangepicker', function () {
                  console.log("show event fired");
              });
              $('#reportrange').on('hide.daterangepicker', function () {
                  console.log("hide event fired");
              });
              $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                  console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
              });
              $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                  console.log("cancel event fired");
              });
              $('#options1').click(function () {
                  $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
              });
              $('#options2').click(function () {
                  $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
              });
              $('#destroy').click(function () {
                  $('#reportrange').data('daterangepicker').remove();
              });
          });
      </script>
      <script>
          NProgress.done();
      </script>
      <!-- /datepicker -->
      <!-- /footer content -->

      <?php
      break;


        case 'katalog-produk':
        ?>
        <!-- Datatables -->
        <script src="../assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="../assets/js/datatables/tools/js/dataTables.tableTools.js"></script>

        <script>
        $(function() {
        $('#produk').DataTable( {
        // "bJQueryUI":true,
        "searching":false,
        "bPaginate":true,
        "sPaginationType": "full_numbers",
        "iDisplayLength":50
        } );

        } );
        </script>
        <!-- end datatable -->

        <?php
        break;

        case 'halaman-single':
        ?>
        <!-- CK Editor -->
        <script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
        <script type='text/javascript'>
          CKEDITOR.replaceAll('about');
        </script>
        <?php
        break;

        case 'konfigurasi-infousaha':
        ?>
        <!-- form wizard -->
        <script type="text/javascript" src="../assets/js/wizard/jquery.smartWizard.js"></script>
        <script type="text/javascript">
        // Default Properties and Events
            $.fn.smartWizard.defaults = {
                selected: 0,  // Selected Step, 0 = first step
                keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
                enableAllSteps: false,
                transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
                contentURL:null, // content url, Enables Ajax content loading
                contentCache:true, // cache step contents, if false content is fetched always from ajax url
                cycleSteps: false, // cycle step navigation
                enableFinishButton: false, // make finish button enabled always
                hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead?
                errorSteps:[],    // Array Steps with errors
                labelNext:'Selanjutnya',
                labelPrevious:'Sebelumnya',
                labelFinish:'Selesai',
                noForwardJumping: false,
                ajaxType: "POST",
                onLeaveStep: true, // triggers when leaving a step
                onShowStep: null,  // triggers when showing a step
                onFinish: null,  // triggers when Finish button is clicked
                includeFinishButton : true   // Add the finish button
            };

        })(jQuery);
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                // Smart Wizard
                $('#wizard').smartWizard();

                function onFinishCallback() {
                    $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                    //alert('Finish Clicked');
                }
            });

            $(document).ready(function () {
                // Smart Wizard
                $('#wizard_verticle').smartWizard({
                    transitionEffect: 'slide'
                });

            });


        </script>
        <?php
        break;

        case 'konfigurasi-tema':
        ?>
        <!-- Datatables -->
        <script src="../assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="../assets/js/datatables/tools/js/dataTables.tableTools.js"></script>

        <script>
        $(function() {
        $('#tema').DataTable( {
        // "bJQueryUI":true,
        "bSort":false,
        "searching":false,
        "bPaginate":true,
        "sPaginationType": "full_numbers",
        "iDisplayLength":5
        } );

        } );
        </script>
        <!-- end datatable -->
        <?php
        break;

  }
?>
