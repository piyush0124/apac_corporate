//50 projects in 50 days Udemy

const testimonialsContainer = document.querySelector('.testimonials-container');
const testimonial = document.querySelector('.testimonial');
const userImage = document.querySelector('.user-image');
const username = document.querySelector('.username');
const role = document.querySelector('.role');

const testimonials = [
  {
    name: 'Ajit Singh Pal',
    position: 'Honble Minister of State IT & Electronics <br> Uttar Pradesh',
    photo:
      'https://apacnewsnetwork.com/wp-content/uploads/2024/09/Shri_Ajit_Singh_Pal.png',
    text:
      "I applaud APAC News Network on successfully hosting the '3rd India Digital Empowerment Meet & Awards' in Lucknow and for bringing together industry leaders and policymakers to discuss various facets of Uttar Pradesh's digital empowerment. Best wishes for their upcoming events.",
  },
  {
    name: 'Durga Shanker Mishra, IAS ',
    position: ' Former Chief Secretary <br> Uttar Pradesh',
    photo: 'https://apacnewsnetwork.com/healthcare/uttar-pradesh/assets/images/speakers/ds-mishra.png',
    text:
      'APAC News Network does an excellent job of bringing stakeholders together to generate a meaningful debate about the relevance of technology, innovation, and sustainability, which can aid in policymaking. My best wishes to Team APAC for all of their future endeavors.',
  },
  {
    name: 'Dr. Ajay Kumar, IAS',
    position: 'Former Defence Secretary of India',
    photo: 'https://apacnewsnetwork.com/wp-content/uploads/2024/09/ajay-kumar-IAS.png',
    text:
      "I have to commend APAC News Network for their outstanding efforts. Knowing that a news network like yours emphasizes positivity is wonderful. We anticipate that APAC News Network will continue to provide this kind of encouraging news in the years to come.",
  },
  {
    name: 'G Asok Kumar, IAS',
    position: 'Former Director General & Additional Secretary Namami Gange <br> Ministry of Jal Shakti <br> Government of India',
    photo: 'https://apacnewsnetwork.com/urban/2nd-edition/img/speaker/0312.jpg',
    text:
      "During my stint as Additional Secretary & Mission Director, National Water Mission, we launched the 'Catch the Rain Campaign' to raise awareness about the necessity of proper rainwater harvesting for sustainable water management. That campaign has had a significant impact at the grassroots level in various sections of the country. I am pleased to inform you that APAC News Network has played an essential role in the success of this campaign, and I wish & hope they continue to do so.",
  },
  {
    name: 'Dr. C S Kumar, IAS',
    position: 'Additional Secretary Ministry of Panchayati Raj <br> Government of India',
    photo: 'https://apacnewsnetwork.com/wp-content/uploads/2024/09/cs-kumar.png',
    text:
      "APAC News Network is organizing seminars and webinars on a variety of themes, with a particular emphasis on digital innovation. They bring stakeholders from many domains, and I am confident that this will help everyone gain knowledge. My warmest congratulations to them for their excellent work. ",
  },
  
]


let idx = 1;

function updateTestimonials(){
  const {name, position, photo, text} = testimonials[idx];
  
  testimonial.innerHTML = text;
  userImage.src = photo;
  username.innerHTML = name;
  role.innerHTML = position;
  
  idx++;
  
  if(idx > testimonials.length - 1){
    idx = 0;
  }
}

setInterval(updateTestimonials, 5000);