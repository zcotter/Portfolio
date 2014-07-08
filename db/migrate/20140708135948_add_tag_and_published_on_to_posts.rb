class AddTagAndPublishedOnToPosts < ActiveRecord::Migration
  def change
    add_column :posts, :tag, :string
    add_column :posts, :published_on, :datetime
  end
end
