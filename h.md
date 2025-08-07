
 TESTIMONIALS HTML SECTION =>

<div class="testimonials-slider">
    <div class="test-item active">
      <img class="test-item-image" src="images/testimonials/swetaPandey.png" alt="1st image">
      <h3 class="test-item-title">Sweta Pandey</h3>
      <p class="test-item-description">I am grateful to have found rohit sir's guidance in my wellness journey. He is very patient and dedicated with each one of his students. His instructions are so clear and he personally helps students correct their yoga postures.
        Best yoga institute in haldwani.</p>
    </div>

    <div class="test-item">
      <img class="test-item-image" src="images/testimonials/deepaliPandey.png" alt="2nd image">
      <h3 class="test-item-title">Deepali Pandey</h3>
      <p class="test-item-description">Hari Om!!

        I am learning yoga at Aarogya Yog Kendra, Haldwani, and my experience with Rohit Bhatt Sir has been amazing! Thank you, Sir, for your guidance and patience, which make every session comfortable and enjoyable. I highly recommend Rohit Bhatt at Aarogya Yoga Kendra!
     </p>
    </div>

    <div class="test-item">
      <img class="test-item-image" src="images/testimonials/vinitaPant.png" alt="3rd image">
      <h3 class="test-item-title">Vinita Pant </h3>
      <p class="test-item-description">Aarogya yog kendra is the perfect place for overall mental and physical health.. I have been a regular member for a year and I has found so many benifit physically as well as mentally. Our yoga teacher Mr. Rohit Bhatt has been so supportive. Highly recommended for the residential of Haldwani.</p>
    </div>

    <div class="test-item">
      <img class="test-item-image" src="images/testimonials/ankitaPandey.png" alt="4th image">
      <h3 class="test-item-title">Ankita Pandey</h3>
      <p class="test-item-description">Thank you so much for your amazing guidance in each session. Your expertise and calming presence create such a peaceful and supportive environment, making it easy to stay focused and relaxed. Keep up the great work.  </p>
    </div>
  </div>
  <div class="testimonial-dots" id="testimonialDots"></div>



TESTIMONIALS CSS SECTION =>

/* Testimonials Section */
.testimonials-container {
  background: #f5f5f5;
  padding: 60px 0;
}

.testimonials-section {
  max-width: 1200px;
  display: flex;
  flex-direction: column;
  margin: 0 auto;
  text-transform: capitalize;
  gap: 1rem;
}

.testimonials-grid-container {
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  gap: 4.5rem;
}

.testimonials-slider {
  position: relative;
  overflow: hidden;
  min-height: 300px;
}

.test-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  opacity: 0;
  transform: translateX(100%);
  transition: transform 1s ease, opacity 3s ease;
  pointer-events: none;
}

.test-item.active {
  opacity: 1;
  transform: translateX(0);
  pointer-events: auto;
  display: flex;
}

.test-item-image {
  height: 200px;
  width: 200px;
  object-fit: cover;
  border-radius: 50%;
}

.testimonials-title {
  color: #2e2e2e;
  font-weight: 700;
  text-transform: capitalize;
  font-size: 50px;
  text-align: center;
  margin-bottom: 5rem;
}

.testimonials-title::after {
  content: "";
  width: 12rem;
  height: 5px;
  display: block;
  margin: 10px auto 0;
  border-radius: 10px;
  background: var(--secondary-color);
}

.test-item-description {
  text-align: center;
  line-height: 20px;
}

.testimonial-dots {
  display: flex;
  justify-content: center;
  margin-top: -2px;
  gap: 10px;
}

.testimonial-dot {
  width: 10px;
  height: 10px;
  background: var(--secondary-color);
  border-radius: 50%;
  cursor: pointer;
  transition: background 0.3s;
}

.testimonial-dot.active {
  background: #ffeb3b;
}

.test-item.active {
  opacity: 1;
  transform: translateX(0);
}
