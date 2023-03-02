const accordionItems = document.querySelectorAll('.accordion-item');

if ( accordionItems ) {

	accordionItems.forEach((item) => {

		const itemButton = item.querySelector('.accordion-item--title button');

		itemButton.addEventListener('click', (event) => {

			let isExpanded = itemButton.getAttribute('aria-expanded'), 
					targetEl = document.getElementById( itemButton.getAttribute('aria-controls') );

			if ( isExpanded == true || isExpanded == "true" ) {
				if ( targetEl ) {
					targetEl.hidden = true;
				}
				itemButton.setAttribute('aria-expanded', false);
			} else {
				if ( targetEl ) {
					targetEl.hidden = false;
				}
				itemButton.setAttribute('aria-expanded', true);
			}

		});

	});

}
