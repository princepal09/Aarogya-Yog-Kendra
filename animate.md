.footer-social-media-links i {
  color: #a6ce39; /* Default icon color */
  transition: transform 0.3s ease, color 0.3s ease; /* Smooth transition */
}

.footer-social-media-links i:hover {
  color: #7fbf3e; /* Darker green on hover */
  transform: scale(1.2); /* Icon size increases */
}
.footer-social-media-links i {
  animation: pulse 1s infinite; /* Continuous pulse effect */
}

@keyframes pulse {
  0% {
      transform: scale(1);
  }
  50% {
      transform: scale(1.2);
  }
  100% {
      transform: scale(1);
  }
}