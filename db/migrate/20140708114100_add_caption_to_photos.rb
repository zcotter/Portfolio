class AddCaptionToPhotos < ActiveRecord::Migration
  def change
    add_column :post_photos, :caption, :text
  end
end
