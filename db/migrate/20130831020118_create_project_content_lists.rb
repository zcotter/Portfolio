class CreateProjectContentLists < ActiveRecord::Migration
  def change
    create_table :project_content_lists do |t|
      t.string :title
      t.belongs_to :project
      t.timestamps
    end
  end
end
