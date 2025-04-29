const addButton = document.getElementById('add-button');
const tripCardsContainer = document.getElementById('trip-cards');

const trips = [
  { img: 'beaches.jpg', title: 'Djerba', price: 800, link: 'djerba.html' },
  { img: 'matmata.jpg', title: 'Visit Matmata', price: 400, link: 'matmata.html' },
  { img: 'Mahdia.jpg', title: 'Discover Mahdia', price: 400, link: 'mahdia.html' },
  { img: 'quad.jpg', title: 'Adventures', price: 400, link: 'adventures.html' },
  { img: 'ruins.jpg', title: 'Historical Journey', price: 400, link: 'history.html' },
  { img: 'kerkenah.jpg', title: 'Visit Kerkenah', price: 600, link: 'kerkenah.html' }
];

let tripIndex = 0;
let clickCount = 0;

addButton.addEventListener('click', () => {
  if (clickCount >= 2) {
    addButton.disabled = true; // Disable the button
    addButton.style.opacity = '0.5'; // Make it visually faded
    return;
  }

  const newRow = document.createElement('div');
  newRow.classList.add('trip-row');

  for (let i = 0; i < 3; i++) {
    if (tripIndex >= trips.length) break;

    const trip = trips[tripIndex];

    const newCard = document.createElement('div');
    newCard.classList.add('trip-card');

    newCard.innerHTML = `
      <img src="${trip.img}" alt="${trip.title}">
      <h2>${trip.title}</h2>
      <p>From <span>$${trip.price}</span></p>
      <a href="${trip.link}" class="explore-link">
        <button class="explore-btn">Explore <span>→</span></button>
      </a>
    `;

    newRow.appendChild(newCard);
    tripIndex++;
  }

  tripCardsContainer.appendChild(newRow);
  clickCount++;
});
