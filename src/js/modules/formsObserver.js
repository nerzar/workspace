class FormsObserver {
  constructor(formProcessClass, formPreProcess) {
    var self = this;
    this._formProcessClass = formProcessClass;
    this._formPreProcess = formPreProcess;
    $('form').submit(function () {
      self.sendForm(this);
    });
  }

  sendForm(formData) {
    var self = this;

    $(formData).append('<div class="' + self._formProcessClass + '"></div>');

    $.ajax({
      url: '/api',
      type: 'POST',
      data: new FormData(formData),
      processData: false,
      contentType: false,
      beforeSend: function () {
        $('.' + self._formProcessClass).html(self._formPreProcess);
      },
      success : function (e) {
        let result = JSON.parse(e)
        $('.' + self._formProcessClass).html(result['answer']);
        if (result['status']) {
          setTimeout(function () {
            for (var i = 0; i < formData.length; i++) {
              $(formData[i]).val('');
            }
            $('.' + self._formProcessClass).remove();
            $('div[data-rf_to]').removeClass('open');
            $('div[data-rf_from]').removeClass('open');
          }, 10000);
        }
      }
    });
  }
}
