var btn = document.getElementById('btn');
btn.onclick = function () {
	var text = document.querySelector('p.intro');
	text.classList.add('yellow');
	var img = document.querySelector('.picture');
	img.style.display = 'none';
	document.querySelector('.worthit').style.marginLeft = "50px";
}
$(function () {
	$(window).scroll(function () {
		$('#future .section-title').each(function () {
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow + 650) {
				$(this).addClass("fadeInLeft");
			}
		});
	});
	$(window).scroll(function () {
		$('.travels').each(function () {
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow + 650) {
				$(this).addClass("fadeInLeft");
			}
		});
	});
})


const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('body');
/*??????*/const lockPadding = document.querySelectorAll('.lock-padding');

let unlock = true; //double click

const timeout = 800;



const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
	for (let index = 0; index < popupCloseIcon.length; index++) {
		const el = popupCloseIcon[index];
		el.addEventListener('click', function (e) {
			popupCloseIcon(el.closest('.popup'));
			e.preventDefault();
		});
	}
}

function popupOpen(curentPopup) {
	if (curentPopup && unlock) {
		const popupActive = document.querySelector('.popup.open');
		if (popupActive) {
			popupClose(popupActive, false);
		} else {
			bodyLock();
		}
		curentPopup.classList.add('open');
		curentPopup.addEventListener("click", function (e) {
			if (!e.target.closest('.popup-content')) {
				popupClose(e.target.closest('.popup'));
			}
		});
	}
}





function popupClose(popupActive, doUnlock = true) {
	if (ulock) {
		popupActive.classList.remove('open');
		if (doUnlock) {
			bodyUnLock();
		}
	}
}



function bodyLock() {
	const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper1').offsetWidth + 'px';
	if (lockPadding.length > 0) {
		for (let index = 0; index < lockPadding.length; index++) {
			const el = lockPadding[index];
			el.style.paddingRight = lockPaddingValue;
		}
	}

	body.style.paddingRight = lockPaddingValue;
	body.classList.add('lock');


	ulock = false;
	setTimeout(function () {
		unlock = true;
	}, timeout);
}





$("#form").submit(function (event) {
	event.preventDefault();
	var formValues = $(this).serialize();

	$.post("php/func.php", formValues, function (data) {

		popupOpen(document.getElementById("popup"));
	});

});
















function bodyUnLock() {
	setTimeout(function () {
		for (let index = 0; index < lockPadding.length; index++) {
			const el = lockPadding[index];
			el.style.paddingRight = '0px';
		}
		body.style.paddingRight = '0px';
		body.classList.remove('lock');
	}, timeout);
	unlock = false;
	setTimeout(function () {
		unlock = true;
	}, timeout);
}


document.addEventListener('keydown', function (e) {
	if (e.which === 27) {
		const popupActivate = document.querySelector('.popup.open');
		popupClose(popupActive);
	}
});



(function () {
	if (!Element.prototype.closest) {
		Element.prototype.closest = function (css) {
			var node = this;
			while (node) {
				if (node.matches(css)) return node;
				else node = node.parentElement;
			}
			return null;
		};
	}
})();


(function () {
	if (!Element.prototype.matches) {
		Element.prototype.matches = Element.prototype.matchesSelector ||
			Element.prototype.webkitMatchesSelector ||
			Element.prototype.mozMatchesSelector ||
			Element.prototype.msMatchesSelector;
	}
})();










