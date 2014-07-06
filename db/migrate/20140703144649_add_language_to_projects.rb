class AddLanguageToProjects < ActiveRecord::Migration
  def change
    add_column :projects, :language, :string unless column_exists? :projects, :language
  end
end
