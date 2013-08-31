class ProjectContentListElement < ActiveRecord::Base
  attr_accessible :content
  belongs_to :project_content_list
end
