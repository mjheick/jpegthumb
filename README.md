# jpegthumb

extract jpeg thumbnail from jpeg image stored in exif information

# to use

Ran this with a basic bash loop:

```
IFS=$'\n';
for F in `find /mnt/usb03/Archive/ -type f -name '*.jpg'`; do
php -f jpegthumb.php "$F";
done;
```

# purpose

Images are stored in files, metadata doubly so. Images can be modified after the fact, and metadata not so much.

Uusally when you edit an image, whether to crop out badness or to add awesome text to create the newest meme the metadata is not modified. If a thumbnail exists in the metadata that also seems to not get updated as well.

This just outputs the image, assuming it's a jpeg due to the input.
