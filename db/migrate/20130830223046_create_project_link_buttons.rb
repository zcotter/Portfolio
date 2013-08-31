class CreateProjectLinkButtons < ActiveRecord::Migration
  def change
    create_table :project_link_buttons do |t|
      t.string :name
      t.string :link
      t.belongs_to :project
      t.timestamps
    end
  end
end
