import initNav from './nav';

export default {
  init() {
    // JavaScript to be fired on all pages
    initNav();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
