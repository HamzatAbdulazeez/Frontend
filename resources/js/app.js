import "./bootstrap";
// JavaScript for Scroll Effect
const header = document.getElementById("header");
window.addEventListener("scroll", () => {
    if (window.scrollY > 10) {
        header.classList.add("bg-white");
    } else {
        header.classList.remove("bg-white");
    }
});

// Updating Year
document.getElementById("year").textContent = new Date().getFullYear();

// Tab logic
const tabData = {
    models: [
        {
            name: "Anabel Adagbasa",
            location: "Lagos, Nigeria",
            price: "₦3,500,000/month",
            rating: "★ 4.93",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image_md7req.png",
        },
        {
            name: "Cynthia Grey",
            location: "Abuja, Nigeria",
            price: "₦3,000,000/month",
            rating: "★ 4.85",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image1_m3adyi.png",
        },
        {
            name: "Ifeoma Bello",
            location: "Ibadan, Nigeria",
            price: "₦2,500,000/month",
            rating: "★ 4.78",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image4_mkeigd.png",
        },
        {
            name: "Chioma Love",
            location: "Enugu, Nigeria",
            price: "₦3,800,000/month",
            rating: "★ 4.95",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image3_znkgvb.png",
        },
        {
            name: "Blessing Joy",
            location: "Kano, Nigeria",
            price: "₦3,200,000/month",
            rating: "★ 4.70",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image1_m3adyi.png",
        },
        {
            name: "Zainab Musa",
            location: "Kaduna, Nigeria",
            price: "₦2,800,000/month",
            rating: "★ 4.82",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743866007/Blastily-Images/image_hhwvdp.png",
        },
        {
            name: "Adaeze Nwankwo",
            location: "Benin, Nigeria",
            price: "₦3,100,000/month",
            rating: "★ 4.88",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image4_mkeigd.png",
        },
        {
            name: "Lilian Okoro",
            location: "Jos, Nigeria",
            price: "₦2,900,000/month",
            rating: "★ 4.80",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image_md7req.png",
        },
    ],
    influencers: [
        {
            name: "Blessing Joy",
            desc: "Fashion Guru",
            location: "Kano, Nigeria",
            price: "₦3,200,000/month",
            rating: "★ 4.70",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743866008/Blastily-Images/image4_qva92s.png",
        },
        {
            name: "Zainab Musa",
            desc: "Travel Content Creator",
            location: "Kaduna, Nigeria",
            price: "₦2,800,000/month",
            rating: "★ 4.82",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743866007/Blastily-Images/image_hhwvdp.png",
        },
        {
            name: "Adaeze Nwankwo",
            desc: "Comedy Skits",
            location: "Benin, Nigeria",
            price: "₦3,100,000/month",
            rating: "★ 4.88",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743866008/Blastily-Images/image1_cry6nt.png",
        },
        {
            name: "Lilian Okoro",
            desc: "Makeup Pro",
            location: "Jos, Nigeria",
            price: "₦2,900,000/month",
            rating: "★ 4.80",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743866007/Blastily-Images/image3_akrdaa.png",
        },
        {
            name: "Hamzat Adeleke",
            desc: "Fitness Influencer",
            location: "Lagos, Nigeria",
            price: "₦3,500,000/month",
            rating: "★ 4.93",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image_md7req.png",
        },
        {
            name: "Cynthia Grey",
            desc: "Beauty Blogger",
            location: "Abuja, Nigeria",
            price: "₦3,000,000/month",
            rating: "★ 4.85",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image1_m3adyi.png",
        },
        {
            name: "Ifeoma Bello",
            desc: "Tech Reviewer",
            location: "Ibadan, Nigeria",
            price: "₦2,500,000/month",
            rating: "★ 4.78",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image4_mkeigd.png",
        },
        {
            name: "Chioma Love",
            desc: "Music Promoter",
            location: "Enugu, Nigeria",
            price: "₦3,800,000/month",
            rating: "★ 4.95",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image3_znkgvb.png",
        },
    ],
    billboards: [
        {
            name: "Lagos Fashion Week",
            desc: "Fashion Show",
            location: "Lagos, Nigeria",
            price: "₦1,000,000",
            rating: "★ 4.90",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872418/Blastily-Images/image_e76aa2.png",
        },
        {
            name: "Abuja Tech Expo",
            desc: "Tech Conference",
            location: "Abuja, Nigeria",
            price: "₦800,000",
            rating: "★ 4.85",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872419/Blastily-Images/image4_ro4pry.png",
        },
        {
            name: "Ibadan Music Fest",
            desc: "Music Festival",
            location: "Ibadan, Nigeria",
            price: "₦600,000",
            rating: "★ 4.80",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872419/Blastily-Images/image3_t272pz.png",
        },
        {
            name: "Enugu Art Fair",
            desc: "Art Exhibition",
            location: "Enugu, Nigeria",
            price: "₦700,000",
            rating: "★ 4.75",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872419/Blastily-Images/image2_mnzd1p.png",
        },
    ],
    news: [
        {
            name: "Billboard Ad",
            desc: "High Visibility",
            location: "Lagos, Nigeria",
            price: "₦500,000",
            rating: "★ 4.95",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872823/Blastily-Images/image2_l9dpkr.png",
        },
        {
            name: "Social Media Ad",
            desc: "Targeted Reach",
            location: "Online",
            price: "₦300,000",
            rating: "★ 4.85",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872822/Blastily-Images/image_xhnnoq.png",
        },
        {
            name: "TV Commercial",
            desc: "Mass Audience",
            location: "National",
            price: "₦1,000,000",
            rating: "★ 4.80",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872821/Blastily-Images/image3_vzxljf.png",
        },
        {
            name: "Radio Spot",
            desc: "Local Reach",
            location: "Regional",
            price: "₦200,000",
            rating: "★ 4.70",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743872821/Blastily-Images/image4_elz0e8.png",
        },
    ],
    blogs: [
        {
            name: "Anabel Adagbasa",
            desc: "Fitness Model",
            location: "Lagos, Nigeria",
            price: "₦3,500,000/month",
            rating: "★ 4.93",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873032/Blastily-Images/image3_jm0bqp.png",
        },
        {
            name: "Cynthia Grey",
            desc: "Fashion Model",
            location: "Abuja, Nigeria",
            price: "₦3,000,000/month",
            rating: "★ 4.85",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873032/Blastily-Images/image3_jm0bqp.png",
        },
        {
            name: "Ifeoma Bello",
            desc: "Commercial Model",
            location: "Ibadan, Nigeria",
            price: "₦2,500,000/month",
            rating: "★ 4.78",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873005/Blastily-Images/image2_gnoa4h.png",
        },
        {
            name: "Chioma Love",
            desc: "Runway Model",
            location: "Enugu, Nigeria",
            price: "₦3,800,000/month",
            rating: "★ 4.95",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743865618/Blastily-Images/image3_znkgvb.png",
        },
        {
            name: "Blessing Joy",
            desc: "Editorial Model",
            location: "Kano, Nigeria",
            price: "₦3,200,000/month",
            rating: "★ 4.70",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873004/Blastily-Images/image_aq8xd6.png",
        },
    ],
    cinema: [
        {
            name: "Lekki Billboard",
            desc: "Premium Spot in Lagos",
            location: "Enugu, Nigeria",
            price: "₦3,800,000/month",
            rating: "★ 4.95",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873409/Blastily-Images/image4_fn7jn7.png",
        },
        {
            name: "Ojota Tower",
            desc: "Highway View",
            location: "Lagos, Nigeria",
            price: "₦3,200,000/month",
            rating: "★ 4.70",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873408/Blastily-Images/image3_idvl7d.png",
        },
        {
            name: "Mile 12 Giant",
            desc: "Massive Reach",
            location: "Lagos, Nigeria",
            price: "₦2,500,000/month",
            rating: "★ 4.78",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873408/Blastily-Images/image_xf0zir.png",
        },
        {
            name: "Ring Road Board",
            desc: "Ibadan CBD",
            location: "Ibadan, Nigeria",
            price: "₦3,800,000/month",
            rating: "★ 4.95",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873407/Blastily-Images/image2_rkck0y.png",
        },
        {
            name: "Kano Central",
            desc: "City Hub",
            location: "Kano, Nigeria",
            price: "₦3,200,000/month",
            rating: "★ 4.70",
            img: "https://res.cloudinary.com/ddj0k8gdw/image/upload/v1743873409/Blastily-Images/image4_fn7jn7.png",
        },
    ],
};

const tabs = Object.keys(tabData);
const container = document.getElementById("tabs-container");
const cardTemplate = document.getElementById("card-template").content;

tabs.forEach((tab, index) => {
    const section = document.createElement("div");
    section.id = tab;
    section.className = `tab-content ${
        index === 0 ? "" : "hidden"
    } grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5`;
    tabData[tab].forEach((item) => {
        const card = cardTemplate.cloneNode(true);
        card.querySelector(".card-img").src = item.img;
        card.querySelector(".card-name").textContent = item.name;
        card.querySelector(".card-rating").textContent = item.rating;
        card.querySelector(".card-location").innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block mr-1 text-[#6A6A6A]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13 21.314l-4.657-4.657A8 8 0 1117.657 16.657z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        ${item.location}
        `;
        card.querySelector(".card-price").textContent = item.price;
        section.appendChild(card);
    });
    container.appendChild(section);
});

const tabBtns = document.querySelectorAll(".tab-btn");
const contents = document.querySelectorAll(".tab-content");
tabBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        tabBtns.forEach((b) => b.classList.remove("active-tab"));
        contents.forEach((c) => c.classList.add("hidden"));
        btn.classList.add("active-tab");
        document.getElementById(btn.dataset.tab).classList.remove("hidden");

        // Scroll selected tab into view
        btn.scrollIntoView({
            behavior: "smooth",
            inline: "center",
            block: "nearest",
        });
    });
});

document.body.addEventListener("click", (e) => {
    if (e.target.classList.contains("like-btn")) {
        e.target.textContent = e.target.textContent === "♡" ? "❤️" : "♡";
        e.target.classList.toggle("text-red-500");
    }
});

// Chaning Images

