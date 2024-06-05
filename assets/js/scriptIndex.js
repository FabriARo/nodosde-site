const wrapper = document.querySelector(".wrapper");
const slideNews = document.querySelector(".slideNews");
const firstCardWidth = slideNews.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const slideNewsChildrens = [...slideNews.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the slideNews at once
let cardPerView = Math.round(slideNews.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of slideNews for infinite scrolling
slideNewsChildrens.slice(-cardPerView).reverse().forEach(card => {
    slideNews.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of slideNews for infinite scrolling
slideNewsChildrens.slice(0, cardPerView).forEach(card => {
    slideNews.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the slideNews at appropriate postition to hide first few duplicate cards on Firefox
slideNews.classList.add("no-transition");
slideNews.scrollLeft = slideNews.offsetWidth;
slideNews.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the slideNews left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        slideNews.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    slideNews.classList.add("dragging");
    // Records the initial cursor and scroll position of the slideNews
    startX = e.pageX;
    startScrollLeft = slideNews.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the slideNews based on the cursor movement
    slideNews.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    slideNews.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the slideNews is at the beginning, scroll to the end
    if(slideNews.scrollLeft === 0) {
        slideNews.classList.add("no-transition");
        slideNews.scrollLeft = slideNews.scrollWidth - (2 * slideNews.offsetWidth);
        slideNews.classList.remove("no-transition");
    }
    // If the slideNews is at the end, scroll to the beginning
    else if(Math.ceil(slideNews.scrollLeft) === slideNews.scrollWidth - slideNews.offsetWidth) {
        slideNews.classList.add("no-transition");
        slideNews.scrollLeft = slideNews.offsetWidth;
        slideNews.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over slideNews
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}


const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the slideNews after every 2500 ms
    timeoutId = setTimeout(() => slideNews.scrollLeft += firstCardWidth, 5000);
}
autoPlay();

slideNews.addEventListener("mousedown", dragStart);
slideNews.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
slideNews.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
