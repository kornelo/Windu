function DropDown(el) {
				this.share = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.share.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var share = new DropDown( $('#share') );

				$(document).click(function() {

					$('.sharebuttons').removeClass('active');
				});

			});

