const { default: Axios } = require('axios');

require('./bootstrap');

$(document).ready(function() {
  $('#states').on('change', function(){
    let state = $(this).children('option:selected').val();

    axios.request({
      method: "POST",
      url: `/cities/${state}`,
      state: state,
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
      },
    })
    .then(resp => {
      let stateSelected = [state];

      filtered = stateSelected.reduce(
        (obj, key) => {
          obj[key] = resp.data[key];
          return obj
        }, {});

      $('#cities').empty();
      $('#cities').append(`<option value=''>-- Seleccione --</option>`)
      $.each(filtered[state], function(index, value) {
        $('#cities').append(`<option value='${value}'>${value}</option>`)
      });
    })
    .catch(error => {
      console.log(error);
    })
  });

  $('#contact-form').submit(function(e) {
    e.preventDefault();
    let data = $(this).serializeArray().reduce(function(obj, item) {
      obj[item.name] = item.value;
      return obj;
    }, {});

    axios.request({
      method: "POST",
      url: `/contacts/add`,
      data,
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
      },
    })
    .then(resp => {
      console.log('resp', resp.data.message);
    })
    .catch(error => {
      console.log(error);
    })
  });
});
