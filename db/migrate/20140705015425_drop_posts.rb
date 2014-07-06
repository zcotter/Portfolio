class DropPosts < ActiveRecord::Migration
  def change
    drop_table :posts if table_exists? :posts
  end
end
