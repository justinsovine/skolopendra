#!/bin/bash

# Create an "originals" folder if it doesn't exist
mkdir -p originals

# Loop through all image files in the current directory
for img in *.jpg *.JPG *.jpeg *.JPEG; do
    # Skip if no images are found
    [ -e "$img" ] || continue

    # Move the original image to the "originals" folder
    mv "$img" originals/

    # Resize while keeping aspect ratio and reducing file size
    magick originals/"$img" -resize 80% -strip -quality 85 "$img"

    echo "Processed: $img"
done

echo "All images resized (aspect ratio preserved), compressed, and originals moved to 'originals' folder."

