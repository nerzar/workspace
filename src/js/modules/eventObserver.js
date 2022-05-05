class EventObserver {

  /**
  * @method watchClick
  * @todo Инициализирует свойства и наблюдение за событиями.
  * @property string c_from Атрибут прослушиваемого элемента на клик.
  * @property string c_to Атрибут элемента, который реагирует на событие клика.
  * @property string c_class Добавляемый класс элеметна, на который кликнули
  * и который реагирует на клик.
  * @since 1.0.0
  * @return void
  */
  constructor() {
    this.c_from = 'data-rf_from';
    this.c_to   = 'data-rf_to';
    this.c_class = 'open';
  }

  /**
  * @method watchClick
  * @todo Наблюдает за собитиями клика у элементов
  * с атрибутами this.c_from, this.c_to. По клику на каждый такой элемент
  * добавляет классасогласно свойства класса c_class.
  * @since 1.0.0
  * @return void
  */
  watchClick() {
    var ct = this.c_to;
    var cf = this.c_from;
    var cc = this.c_class;

    $('[' + this.c_from + ']').click(function () {
      let attr_data = $(this).attr(cf);
      let elem_to   = '[' + ct + '=' + attr_data + ']';
      let elem_from   = '[' + cf + '=' + attr_data + ']';
      if ($(this).hasClass(cc)) {
        $('body').removeClass('fixed');
        $(this).removeClass(cc);
        $(elem_to).removeClass(cc);
        $(elem_from).removeClass(cc);
      }else {
        $('body').addClass('fixed');
        $(this).addClass(cc);
        $(elem_to).addClass(cc);
        $(elem_from).addClass(cc);
      }
    });
  }
}
