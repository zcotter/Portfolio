class CreateArticlePhotos < ActiveRecord::Migration
  def up
    create_table :post_photos do |t|
      t.belongs_to :post
    end
    add_attachment :post_photos, :image
  end
  def down
    remove_attachment :post_photos, :image
    drop_table :post_photos
  end
end
