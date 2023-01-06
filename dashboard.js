/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  var ctx = document.getElementById('myChart')
 // let a=document.getElementById(HoraireTotal);
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
      labels: [
        'ICT101',
        'ICT103',
        'ICT105',
       'T107',
       'ICT109',
      'ICT111',
      'ENG104',
      'FRAN104',
      'ICT102',
      'ICT104',
      'ICT106',
      'ICT108',
      'ICT110',
      'ENG203',
      'FRAN203',
      'ICT201',
      'ICT203',
      'ICT205',
      'ICT213',
      'ICT217',
      'ICT214',
      'ICT215',
      'ICT2O7',
      'ICT202',
      'ICT204',
      'ICT206',
      'ICT208',
      'ICT210',
      'ICT216',
      'ICT218',
      'ENG303',
      'FRA303',
      'ICT301',
      'ICT303',
      'ICT305',
      'ICT300',
      'ICT317',
     'ICT314',
      'ICT315',
      'ICT3O7',
      'ICT313',
      'ICT302',
      'ICT304',
      'ICT306',
      'ICT308',
      'ICT310',
      'ICT316',
      'ICT318'
      ],
      datasets: [{
      data: [
      '5',
      '12',
      '20',
      '23',
      '2',
      '10',
      '13',
      '14',
      '9',
      '48',
      '16',
      '48',
      '12',
      '43',
      '20',
      '18',
      '48',
      '19',
      '20',
      '15',
      '8',
      '9',
      '10',
      '30',
      '68',
      '14',
      '45',
      '12',
      '10',
      '20',
      '61',
      '24',
      '10',
      '7',
      '19',
      '18',
      '20',
     '10',
      '15',
      '16',
      '57',
      '3',
      '45',
      '48',
      '14',
      '16',
      '17',
      '21'
      ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: 'purple',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})()
