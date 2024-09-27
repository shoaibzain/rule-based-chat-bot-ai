export const info = {
    chatbot: 'Nova',
    name: 'Aspire Digital',
    logo: 'https://aspiredigital.pk/wp-content/uploads/2024/02/aspire-Logo-white.svg',
    website: 'https://aspiredigital.pk/',
    email: 'info@aspiredigital.pk',
    phone: '923273630329',
    whatsapp: '923273630329',
    whatsappUrl: 'https://api.whatsapp.com/send/?phone=923273630329&text&type=phone_number&app_absent=0',
    address: 'Office 208, Second Floor, Block B, Anum Classic, Shahrah Faisal, Karachi',
    directions: 'https://maps.app.goo.gl/U8htrHTSnLSvz3Hq6'
};

export const messagesinfo = [

    // STEP 0 (Company name)
    { type: 'bot', text: '<span>Enter your company name</span>' },

    // STEP 1 (Website)
    { type: 'bot', text: '<span>Please enter your website</span>' },

    // STEP 2 (Social media accounts)
    { type: 'bot', text: '<span>Enter your social media accounts</span>' },

    // STEP 3 (Phone)
    { type: 'bot', text: '<span>Enter the best email to reach you</span>' },

    // STEP 4 (Email)
    { type: 'bot', text: '<span>Enter the best email to reach you</span>' }

]

export const errormessages = [

    // STEP 0 (Return Main Menu)
    { type: 'bot', text: '<span>Please choose a valid option.</span>' },

    // STEP 1 (Phone valid)
    { type: 'bot', text: '<span>Oops! it seems you entered a wrong phone number, I need a valid phone number so I can reach you.</span>' }

]

export const successmessages = [

    // STEP 0 (Reach out)
    { type: 'bot', text: '<span>Our team will reach out to you as soon as possible, {name}!</span>' },

]

export const messages = [
    // STEP 0 (Welcome)
    { type: 'bot', text: '<span>Welcome to ' + info.name + ', My Name is ' + info.chatbot + ' and I will be assisting you today.</span><span>May I know who I am chatting with to address you properly?</span>' },

    // STEP 1 (phone number)
    { type: 'bot', text: '<span>Nice to meet you {name}, hope all is well at your end. Please enter your phone number, so we know how to reach you.</span>' },

    // STEP 2 (Thank you Srvices)
    { type: 'bot', text: '<span>Thank you {name}, Is there anything you\'d like to know about from the options below?</span > <div class="block-generic"> <div class="cards horizontal"> <div class="slick-slider" dir="ltr"> <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">How we can help you ☝</div> <div class="subtitle line-breaks"><span></span></div> <div class="element element-group-buttons"> <span class="button" data-response="Our Services" >Our Services</span > </div> </div> </div> </div> <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">Learn more about us</div> <div class="subtitle line-breaks"><span></span></div> <div class="element element-group-buttons"> <span class="button" data-response="About Us">About us</span> </div> </div> </div> </div> </div> </div> </div> <div class="block-quick-replies"> <div class="element element-quick-replies"> <span class="quick-item" data-response="Contact us">&nbsp;Contact us </span ><span class="quick-item" data-response="Whatsapp" ><a href="' + info.whatsappUrl + '" target="blank" >Chat with Whatsapp</a ></span > </div> </div> ' },

    // STEP 3 (Our Services)
    { type: 'bot', text: '<span>Well, lots of ways! That really depends on what kind of help you need 😉</span> <span>In short... We help businesses with their growth &amp; lead generation (as that\'s usually the toughest part of a business) and we also focus specifically on the branding &amp; online design of their businesses too! <br><br>💡 We\'re constantly innovating new services &amp; strategies for our clients to ensure they\'re always up to date and growing at record rates. 🥇 </span> <span> Would you like to see how we do it? </span> <div class="block-quick-replies"> <div class="element element-quick-replies"> <span class="quick-item" data-response="Yes">&nbsp;Yes 👍</span> <span class="quick-item" data-response="Main Menu">&nbsp;Back to Main Menu 👉</span> </div> </div>' },

    // STEP 4 (About Us)
    { type: 'bot', text: '<span >We are everything you’d expect from a digital agency: accountable, flexible and personable.</span ><span >More than a digital agency - we’re a "People First" agency. We build results-oriented business strategies and continually refine your campaigns for the greatest outcome.</span > <div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span >Let\s get in touch and create something great together.📍 We are located in ' + info.address + '</span > </div> <div class="buttons"> <a href="' + info.directions + '" class="button not-underline" target="_blank" data-response="Directions" >Directions</a > <a href="tel:' + info.phone + '" class="button not-underline" target="_self" data-response="Call us" >Call us</a > <a href="' + info.whatsappUrl + '" target="blank" class="button not-underline" data-response="Whatsapp" >Chat with Whatsapp</a > </div> </div> <div class="block-quick-replies"> <div class="element element-quick-replies"> <span class="quick-item" data-response="Main Menu">&nbsp;Main Menu 👉</span> </div> </div> ' },

    // STEP 5 (Contact us)
    { type: 'bot', text: ' <div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>We are here to help, how would you like to reach us?</span> </div> <div class="buttons"> <a href="tel:+' + info.phone + '" class="button not-underline" target="_self" data-response="Call us" >Call us</a > <a href="' + info.whatsappUrl + '" target="blank" class="button not-underline" data-response="Whatsapp" >Chat with Whatsapp</a > </div> </div> <div class="block-quick-replies"> <div class="element element-quick-replies"> <span class="quick-item" data-response="Main Menu">&nbsp;Main Menu 👉</span> </div> </div> ' },

    // STEP 6 (Whatsapp)
    { type: 'bot', text: '<span>Great! We would be happy to show you how we can help you. {name}</span>' },

    // STEP 7 (Our Services Yes)
    {
        type: 'bot', text: `<span>Great! We\'ve got a couple of different ways we can help you {name}</span><span>Please choose what you\re more inclined for in the options below...</span>
     <div class="block-generic"> <div class="cards horizontal"> <div class="slick-slider" dir="ltr"> 
     <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">Social Media Marketing</div> <div class="subtitle line-breaks"> <span >Want to get into social media, but don\’t know how? Here is how.. </span> </div> <div class="element element-group-buttons"> <span class="button" data-response="Social Media Marketing">Learn More 👉</span> </div> </div> </div> </div> 
     <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">Advertising</div> <div class="subtitle line-breaks"> <span >We connect your products services to thousands of people who may be interested</span > </div> <div class="element element-group-buttons"> <span class="button" data-response="Advertising">Learn More</span> </div> </div> </div> </div> 
     <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">Website Design &amp; Development</div> <div class="subtitle line-breaks"> <span >Crafting a creative, optimized web presence that achieves your goals.</span > </div> <div class="element element-group-buttons"> <span class="button" data-response="Website Design &amp; Development">Learn More 👉</span> </div> </div> </div> </div> 
     <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">Branding</div> <div class="subtitle line-breaks"> <span >Create eye-catchy business Logo, Company Profile, Flyers, Brochures, etc.</span > </div> <div class="element element-group-buttons"> <span class="button" data-response="Branding">Learn More 👉</span> </div> </div> </div> </div> 
     <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">Search Engine Optimization</div> <div class="subtitle line-breaks"> <span>Do you know where your company ranks in Google? </span> </div> <div class="element element-group-buttons"> <span class="button" data-response="Search Engine Optimization">Learn More 👉</span> </div> </div> </div> </div> 
     <div class="slick-slide"> <div class="card-wrapper" tabindex="-1"> <div class="card"> <div class="title">Mobile Application Development</div> <div class="subtitle line-breaks"> <span >Take Your Mobile App Idea to the Next Level. On Time &amp; Within Budget.</span > </div> <div class="element element-group-buttons"> <span class="button" data-response="Mobile Application Development">Learn More 👉</span> </div> </div> </div> </div> </div> </div> </div> ` },

    // STEP 8 (Social Media Marketing)
    { type: 'bot', text: '<span>Great! Will help you to step up your social media marketing game!</span><span>Our Social Media Marketing Services help your business grow brand awareness, relationships, and website traffic.</span><div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Would you like to see our social media marketing process step by step?</span> </div> <div class="buttons"><span class="button" data-response="SMM Process">Check Our Process 👍</span></div> </div>' },

    // STEP 9 (Advertising)
    { type: 'bot', text: '<span>Great! Will help you to step up your social media marketing game!</span><span>Our Social Media Marketing Services help your business grow brand awareness, relationships, and website traffic.</span><span>Would you like to see our  social media marketing step by step?</span><div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Would you like to see our social media marketing process step by step?</span> </div> <div class="buttons"><span class="button" data-response="Advertising Process">Check Our Process 👍</span></div> </div>' },

    // STEP 10 (Website Design & Development)
    { type: 'bot', text: '<span>Awesome! You need a website that represents your company well AND grows your business.</span><div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Get a stunning & powerful website made for your brand. Corporate, e-commerce & more! We GUARANTEE you 100% satisfaction!</span > </div> <div class="buttons"><span class="button" data-response="Website Design & Development Process">Learn More 👉</span></div> </div>' },

    // STEP 11 (Branding)
    { type: 'bot', text: '<span>Develop a unique brand identity for your business</span><div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Would you like to see our social media marketing process step by step?</span > </div> <div class="buttons"><span class="button" data-response="Request a call">📞 Request a call</span></div> </div>' },

    // STEP 12 (Search Engine Optimization)
    { type: 'bot', text: '<div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Lets rank up your business website in Google! </span > </div> <div class="buttons"><span class="button" data-response="Request a call">📞 Request a call</span></div> </div>' },

    // STEP 13 (Search Engine Optimization)
    { type: 'bot', text: '<div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Are you looking to get a Custom Mobile Application developed? </span > </div> <div class="buttons"><span class="button" data-response="Mobile Application Development Process">Yes 👉</span></div> </div>' },

    // STEP 14 (SMM Process)
    { type: 'bot', text: '<span>Our Social Media Marketing Process:</span><span>First: We will assign a dedicated social media manager to your accounts.</span><span>Second: We will develop a social media strategy that is specific to your business</span><span>Third: We will plan out a dynamic on-going social content calendar to guide you to your goals.</span><span>Fourth: We will provide you with a monthly report to track the results</span><div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Get a FREE 🎁social media marketing audit for your business today! </span> </div> <div class="buttons"> <span class="button" data-response="Yes sign me up !">Yes sign me up ! 🎉</span ><span class="button" data-response="Main Menu">Main Menu 👉</span> </div> </div>' },

    // STEP 15 (Website Design & Development Process)
    { type: 'bot', text: '<span>We will deliver: <br />✅01. Advanced Functionality<br />✅02. Content Writing Services<br />✅03. Custom Web Design<br />✅04. An SEO-Optimized<br />✅05. A Website That Drives Leads<br />✅06. A Mobile-Friendly<br />✅07. A Website That Clearly Communicate<br />✅08. Clear Calls To Action</span ><div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Lets talk more about your website in a quick call?</span > </div> <div class="buttons"><span class="button" data-response="Request a call">📞 Request a call</span></div> </div>' },

    // STEP 16 (Mobile Application Development Process)
    { type: 'bot', text: '<div class="block-buttons animation-message-send border-top-left"> <div class="text"> <span>Take Your Mobile App Idea to the Next Level. On Time & Within Budget. Request a call with our developer to help you with your custom mobile app.</span > </div> <div class="buttons"><span class="button" data-response="Request a call">📞 Request a call</span></div> </div>' },

];