class Project < ActiveRecord::Base
  has_many :project_link_buttons
  has_many :project_content_lists
end
