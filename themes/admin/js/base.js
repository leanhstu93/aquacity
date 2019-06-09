var Base = function () {
    return Base.fn.init();
};

Base.fn = Base.prototype = {
    config: {
        selectorSelectImage : '.Ta__js-select-image',
        selectorImageValue : '.Ta__js-image-value',
        selectImagePreview : '.Ta__js-image-preview',
        selectorSortAble : 'ol.simple_with_animation',
        selectorDataMenu : '.Ta_js-data-menu',
        classNotEdit : 'Ta_js-not-edit',
        selectorEditName : '.Ta_js-edit-name',
        selectTitleValue : '.Ta__js-title',
        selectAliasValue : '.Ta__js-alias',
        selectToggleGetAlias : '.Ta__js-toggle-auto-get-alias',
        selectorMultiImage : '.Ta__js-select-multiple',
        selectorImageThumbItem : '.Ta__js-wrap-thumb-image .item',
    },
    init: function () {
        this.handleSelectImage();
        this.autoSlugEvent();
        this.initSortAble();
        this.checkSave();
        this.handleSelectMultiImage();
    },

    handleSelectImage : function () {
        var self = this;
        $(this.config.selectorSelectImage).click(function(e){
            var self_click = $(this);
            e.preventDefault();
            CKFinder.popup({basePath:"http://"+window.location.host+"/filemanager",selectActionFunction:function (url) {
                    self_click.parent().find(self.config.selectorImageValue).val(url);
                    self_click.parent().find(self.config.selectImagePreview).attr('src',url);
                }
            });
        });
    },
    initSortAble : function () {
        var self = this;

        var group = $(self.config.selectorSortAble).sortable({
            group: 'simple_with_animation',
            pullPlaceholder: false,
            // animation on drop
            onDrop: function  ($item, container, _super) {
                var data = group.sortable("serialize").get();
                var result = JSON.stringify(data[0]);
                $(self.config.selectorSortAble).addClass(self.config.classNotEdit);
                $(self.config.selectorDataMenu).val(result);
                var $clonedItem = $('<li/>').css({height: 0});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });
            },

            // set $item relative to cursor position
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });
    },

    checkSave : function() {
        var self  = this;
        $(self.config.selectorEditName).click(function(){
            var has = $(self.config.selectorSortAble).hasClass(self.config.classNotEdit);

            if(has == true) {
                alert('Vui lòng cập nhật trước khi thực hiện thao tác này!');
                return false;
            } else {
                return true;
            }

        });
    },
    JS_bodau_tv: function (cataname_id, seo_name, id)
    {
        var str = $(cataname_id).val();
        str = str.toLowerCase();
        str = str.trim();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
        str = str.replace(/đ/g,"d");
        str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
        str = str.replace(/-+-/g,"-");
        str = str.replace(/^\-+|\-+$/g,"");
        if(typeof id === "undefined" || id == '' || id == 0) $(seo_name).val(str);
    },
    autoSlugEvent: function () {
        var self = this;
        if ($(self.config.selectAliasValue).val() == '')
        {
            $(self.config.selectAliasValue).attr('readonly', 'readonly');
            $(self.config.selectToggleGetAlias).attr('checked', 'checked');
        }

        $(self.config.selectToggleGetAlias).on('change', function () {
            if ($(this).prop('checked')) {
                self.JS_bodau_tv(self.config.selectTitleValue, self.config.selectAliasValue, 0);
                $(self.config.selectAliasValue).attr('readonly', 'readonly');
            } else {
                $(self.config.selectAliasValue).removeAttr('readonly');
            }
        });

        $(self.config.selectTitleValue).on('input ', function () {
            if ($(self.config.selectToggleGetAlias).prop('checked'))
                self.JS_bodau_tv(self.config.selectTitleValue, self.config.selectAliasValue, 0);
        });
    },

    handleSelectMultiImage : function()
    {
        var self = this;
        $(self.config.selectorMultiImage).click(function(){
            var self_click = $(this);
            CKFinder.popup({basePath:"/filemanager",chooseFiles: true,selectMultiple: true,selectActionFunction:function (url,a,data)
                {
                    var leng = $(".Ta__js-wrap-thumb-image .item").length;
                    var num = leng +1;
                    $.each(data, function(index,value){
                        $(".hinhanhlienquan").append("<div class='item'> <div class='iconx Ta__js-remove-item Ta__css-remove-item' ><i class='fa fa-times fa-1' aria-hidden='true'></i></div> <input name='Thuvienanh[data][]' class=' thumb-"+num+"' type='hidden' value='"+value.url+"' /> <img width='90px'  class='nail'  src='"+value.url+"'  />  </div>");
                    });

                    $(".Ta__js-remove-item").click(function(){
                        $(this).parent().remove();

                    });
                }
            });
        });

    }
};

var base = new Base();