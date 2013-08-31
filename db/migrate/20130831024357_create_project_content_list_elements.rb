class CreateProjectContentListElements < ActiveRecord::Migration
  def change
    create_table :project_content_list_elements do |t|
      t.string :content
      t.belongs_to :project_content_list
      t.timestamps
    end
  end
end
