import './bootstrap';

document.addEventListener('alpine:init', function () {
  Alpine.data('modelGallery', function(imagesList) {
    return {
      galleryIndex: 0,
      images: imagesList,
      maxPreviewImages: 2,
      showImagesModal: false,

      currentImage() {
        return this.images[this.galleryIndex];
      },

      toggleModal() {
        document.body.style.overflow = this.showImagesModal ? "auto" : "hidden";
        this.showImagesModal = !this.showImagesModal;
      },

      setImage(index) {
        this.galleryIndex = index;
      },

      nextImage() {
        this.galleryIndex = (this.galleryIndex + 1) % this.images.length;
      },

      previousImage() {
        this.galleryIndex = (this.galleryIndex - 1 + this.images.length) % this.images.length;
      },
    }
  })
});